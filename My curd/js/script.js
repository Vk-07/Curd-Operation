let mainBox = document.getElementById("mainBox");
let formBox = document.getElementById("formBox");
let userbtn = document.getElementById("userbtn");
let formbtn = document.getElementById("formBtn");
let closebtn = document.getElementById("closebtn");
let editbtns = document.querySelectorAll(".edit");
let form =document.querySelector("#formBox form")

userbtn.onclick = () => {
    loadform();
}

closebtn.onclick = () => {
    loadform();
    form.reset();
}




function loadform(){
    formBox.classList.toggle('active');
    if(formBox.classList.contains('active')){
        mainBox.style.filter ="blur(5px)";
    }else{
        mainBox.style.filter = "none";
    }
    
}

// Get Starts here 

editbtns.forEach(e => {
    e.onclick = () =>{
        let editId = e.getAttribute('editId');

        fetch(`http://localhost/My%20curd/php/Curd/get.php?userID=${editId}`)
        .then ( Response => Response.json())
        .then((data) => {
            let username =document.getElementById("username").value =data[1];
            let userage =document.getElementById("userage").value =data[2];
            let userqualy =document.getElementById("userqualy").value =data[3];
            let selectskill =document.getElementById("selectSkill");


            let skillary = ['Web Development', 'Digital Marketing', 'Content Writing' , 'Video Creator', 'Graphic Designing'];
            let skillop = '';
            skillary.forEach(x => {
                if (x === data[4]) {
                    skillop += `<option selected>${x}</option>`;
                } else {
                    skillop += `<option>${x}</option>`;
                }
            });
            

        selectskill.innerHTML = skillop;
        console.log(data[4]);
    
});

    }
});



