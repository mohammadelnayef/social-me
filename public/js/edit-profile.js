imgInp = document.getElementById('formFile')
tmpImg = document.getElementById('tmpImg')
 
imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
      tmpImg.src = URL.createObjectURL(file)
    }
}