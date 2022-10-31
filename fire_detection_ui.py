import streamlit as st
import pandas as pd
import cv2,argparse

def welcome():
    st.title("Fire Detection")
    st.subheader("This app is used to detect fire in the Image. Here are some examples")
    show_file1=st.empty()
    show_file1.image("example1.jpg")
    show_file2=st.empty()
    show_file2.image("example2.jpg")

def upload_image():
    upload_file=st.file_uploader("please upload the picture",type=["jpg","png","jpeg"])
    if upload_file is not None:
        show_file=st.empty()
        show_file.image(upload_file)
    return upload_file



def main():
    selected_box=st.sidebar.selectbox(
        "Choose one of the following",
        ("Welcome","Subscription List","Upload Image")
    )
    
    submit_button=st.sidebar.button("Fire Detection")
    
    if selected_box=="Welcome":
        welcome()
    if selected_box=="Subscription List":
        pass
    if selected_box=="Upload Image":
        upload_image()
    
if __name__=="__main__":
    main()