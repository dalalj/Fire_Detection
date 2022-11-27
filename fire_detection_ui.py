import streamlit as st
import pandas as pd
import cv2,argparse,os,sys
from yolov5 import detect
from PIL import Image
from pathlib import Path
import ffmpeg


def welcome():
    st.title("Fire Detection")
    st.subheader("This app is used to detect fire in the Image. Here are some examples")
    show_file1=st.empty()
    show_file1.image("example1.jpg")
    show_file2=st.empty()
    show_file2.image("example2.jpg")

def upload_image():
    upload_file=st.file_uploader("please upload the picture",type=["jpg","png","jpeg","mp4"])
    if upload_file is not None:
        show_file=st.empty()
        show_file.image(upload_file)
        picture = Image.open(upload_file)
        picture.save(f'data/{upload_file.name}')
    return upload_file

def upload_video():
    upload_file=st.file_uploader("please upload the video",type=["mp4","mov"])
    if upload_file is not None:
        #show_file=st.empty()
        #show_file.video(upload_file)
        with open(f'data/{upload_file.name}', "wb") as f:
            f.write(upload_file.getbuffer())
    return upload_file

def transform_video(input_file_path,output_file_path):
    stream=ffmpeg.input(input_file_path)
    stream=ffmpeg.output(stream,output_file_path)
    ffmpeg.run(stream)

def get_subdirs(b='.'):
    '''
        Returns all sub-directories in a specific Path
    '''
    result = []
    for d in os.listdir(b):
        bd = os.path.join(b, d)
        if os.path.isdir(bd):
            result.append(bd)
    return result
    
def get_detection_folder():
    '''
        Returns the latest folder in a runs\detect
    '''
    return max(get_subdirs(os.path.join('runs', 'detect')), key=os.path.getmtime)


def main():
    selected_box=st.sidebar.selectbox(
        "Choose one of the following",
        ("Welcome","Subscription List","Upload Image","Upload Video","Camera")
    )
    
    submit_button=st.sidebar.button("Fire Detection")
    
    if selected_box=="Welcome":
        welcome()
    if selected_box=="Subscription List":
        # show email list
        email_list_data=pd.read_csv("email_list.csv")
        #myshow_df=AgGrid(email_list_data,editable=True)
        myshow_df=st.dataframe(email_list_data)
        
        # add email
        add_name_str=st.text_input("Add name")
        add_email_str=st.text_input("Add eamil")
        
        add_email_button=st.button("Add")
        if add_email_button:
            add_list=[add_name_str,add_email_str]
            print(add_list)
            add_df=pd.DataFrame([add_list],columns=["name","email"])
            myshow_df.add_rows(add_df)
         
        #del email       
        del_str_num=st.text_input("input the num you want to del:")
        del_eamil_button=st.button("Del")
        if del_eamil_button:
            email_list_data.drop([1])
            print(email_list_data)
            #myshow_df.dataframe(email_list_data)
        
        
    if selected_box=="Upload Image":
        upload_file=upload_image()

        if submit_button:
            parser = argparse.ArgumentParser()
            parser.add_argument('--weights', nargs='+', type=str,
                                    default='best.pt', help='model.pt path(s)')
            parser.add_argument('--source', type=str,
                                    default='', help='source')
            parser.add_argument('--save-conf', action='store_true', help='save confidences in --save-txt labels')
            
            opt, unknown = parser.parse_known_args()
            
            opt.source=f'data/{upload_file.name}'
            opt.project=''
            opt.name=f'result/'
            opt.exist_ok=True
            opt.view_img=True
            
            
            detect.main(opt)
            path=f'./result/'
            print(path)
            for img in os.listdir(path):
                display_img_filename=path+"/"+img
                print(img)
                st.image(display_img_filename)
    
    if selected_box=="Upload Video":
        upload_file=upload_video()

        if submit_button:
            parser = argparse.ArgumentParser()
            parser.add_argument('--weights', nargs='+', type=str,
                                    default='best.pt', help='model.pt path(s)')
            parser.add_argument('--source', type=str,
                                    default='', help='source')
            
            opt, unknown = parser.parse_known_args()
            
            opt.source=f'data/{upload_file.name}'
            opt.project=''
            opt.name=f'result/'
            opt.exist_ok=True
            
            with st.spinner(text="processing..."):
                detect.main(opt)
                path=f'./result/'
                for img in os.listdir(path):
                    display_img_filename=path+"/"+img
                    print("output file :",str(Path(display_img_filename)))
                    output_file_path="./output_result/output_video.mp4"
                    transform_video(str(Path(display_img_filename)),output_file_path)
                    video_file = open(output_file_path, 'rb')
                    video_bytes = video_file.read()
                    st.video(video_bytes)
    if selected_box=="Upload Video":
        if submit_button:
            parser.add_argument('--weights', nargs='+', type=str,
                                    default='best.pt', help='model.pt path(s)')
            parser.add_argument('--source', type=str,
                                    default='0', help='source')
            opt, unknown = parser.parse_known_args()
            
            opt.source=f'data/{upload_file.name}'
            opt.project=''
            opt.name=f'result/'
            opt.exist_ok=True
            detect.main(opt)
    
if __name__=="__main__":
    main()