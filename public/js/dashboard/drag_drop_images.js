//selecting all required elements
const dropArea = document.querySelector(".main-product-image")
const second_images = document.querySelector(".second-product-images")
dropArea_second_images = second_images.children

dragText = dropArea.querySelector(".dragText")
button = document.querySelector(".Browse-File")
// button = dropArea.querySelector("button")
input = dropArea.querySelector("input")
let file; //this is a global variable and we'll use it inside multiple functions
let Files = [];
/*
Array.prototype.forEach.call(dropArea_second_images,e=>{
    
    childIndex = Array.prototype.indexOf.call(dropArea_second_images, e);
    buttons = e.querySelector("button");
    inputs = e.querySelector("input");
    
    buttons.onclick = ()=>{
        inputs.click(); //if user click on the button then the input also clicked
      }

    inputs.addEventListener("change", function(){
        //getting user select file and [0] this means if user select multiple files then we'll select only the first one
        Files[childIndex] = this.files[0];
        dropArea.classList.add("active");
       showFiles(childIndex,e); //calling function
      });
    e.addEventListener("dragover", (event)=>{
        event.preventDefault(); //preventing from default behaviour
        dropArea.classList.add("active");
        dragText.textContent = "Release to Upload File";
      });
    e.addEventListener("dragleave", ()=>{
        dropArea.classList.remove("active");
        dragText.textContent = "Drag & Drop to Upload File";
      });
    e.addEventListener("drop", (event)=>{
        event.preventDefault(); //preventing from default behaviour
        //getting user select file and [0] this means if user select multiple files then we'll select only the first one
        Files[childIndex] = event.dataTransfer.files[0];
        showFiles(childIndex,e); //calling function
      });
      
})
*/


button.onclick = ()=>{
  input.click(); //if user click on the button then the input also clicked
}

input.addEventListener("change", function(){
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = this.files[0];
  dropArea.classList.add("active");
  console.log(file.mozFullPath);
  showFile(); //calling function
});

//If user Drag File Over DropArea
dropArea.addEventListener("dragover", (event)=>{
  event.preventDefault(); //preventing from default behaviour
  dropArea.classList.add("active");
  dragText.textContent = "Release to Upload File";
});

//If user leave dragged File from DropArea
dropArea.addEventListener("dragleave", ()=>{
  dropArea.classList.remove("active");
  dragText.textContent = "Drag & Drop to Upload File";
});

//If user drop File on DropArea
dropArea.addEventListener("drop", (event)=>{
  event.preventDefault(); //preventing from default behaviour
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = event.dataTransfer.files[0];
  showFile(); //calling function
});

function showFile(){
  let fileType = file.type; //getting selected file type
  let validExtensions = ["image/jpeg", "image/jpg", "image/png","image/webp"]; //adding some valid image extensions in array
  if(validExtensions.includes(fileType)){ //if user selected file is an image file
    let fileReader = new FileReader(); //creating new FileReader object
    fileReader.onload = ()=>{
      let fileURL = fileReader.result; //passing user file source in fileURL variable
        // UNCOMMENT THIS BELOW LINE. I GOT AN ERROR WHILE UPLOADING THIS POST SO I COMMENTED IT
        // console.log(fileURL);
      let imgTag = `<img src="${fileURL}" alt="image">`; //creating an img tag and passing user selected file source inside src attribute
      dropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
    }
    fileReader.readAsDataURL(file);
  }else{
    alert("This is not an Image File!");
    dropArea.classList.remove("active");
    dragText.textContent = "Drag & Drop to Upload File";
  }
}


function showFiles(index,child){
    let fileType = Files[index].type; //getting selected file type
    let validExtensions = ["image/jpeg", "image/jpg", "image/png","image/webp"]; //adding some valid image extensions in array
    if(validExtensions.includes(fileType)){ //if user selected file is an image file
      let fileReader = new FileReader(); //creating new FileReader object
      fileReader.onload = ()=>{
        let fileURL = fileReader.result; //passing user file source in fileURL variable
          // UNCOMMENT THIS BELOW LINE. I GOT AN ERROR WHILE UPLOADING THIS POST SO I COMMENTED IT
        let imgTag = `<img src="${fileURL}" alt="image">`; //creating an img tag and passing user selected file source inside src attribute
        child.innerHTML = imgTag; //adding that created img tag inside dropArea container
      }
      fileReader.readAsDataURL(Files[index ]);
    }else{
      alert("This is not an Image File!");
      child.classList.remove("active");
      dragText.textContent = "Drag & Drop to Upload File";
    }
  }
