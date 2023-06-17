let mainBox = document.getElementById('mainBox');
let formBox = document.getElementById('formBox');
let upFormBox = document.getElementById('upformBox');
let form = document.querySelector('#formBox form');
let upForm = document.querySelector('#upformBox form');
let userbtn = document.getElementById('userbtn');
let closeBtn = document.getElementById('closeBtn');
let upcloseBtn = document.getElementById('upcloseBtn');
let editBtns = document.querySelectorAll('body table tbody .edit');
let upUserID = document.getElementById('upUserID');
let deleteBtns = document.querySelectorAll('body table tbody .delete');

userbtn.onclick = () => {
    loadForm();
}

closeBtn.onclick = () => {
    loadForm();
    form.reset();
}

upcloseBtn.onclick = () => {
    uploadForm();
    upForm.reset();
}

function loadForm(){
    formBox.classList.toggle('active');
    if (formBox.classList.contains('active')) {
        mainBox.style.filter="blur(5px)";
    }else{
        mainBox.style.filter="none";
    }
}

function uploadForm(){
    upFormBox.classList.toggle('active');
    if (upFormBox.classList.contains('active')) {
        mainBox.style.filter="blur(5px)";
    }else{
        mainBox.style.filter="none";
    }
}


// start fetching data for update

editBtns.forEach(e => {
    e.onclick = () => {
        uploadForm();
        let editID = e.getAttribute('editID');
        upUserID.value = editID;
        console.log(upUserID.value);

        fetch(`http://localhost/curdOpration/xtar/PHP/Curd/getFetch.php?userID=${editID}`)
        .then( Response => Response.json())
        .then((data) => {
            let userName = document.getElementById('upuserName').value = data[1];            
            let userAge = document.getElementById('upuserAge').value = data[2];            
            let userQly = document.getElementById('upuserQly').value = data[3];    
            let selectSkill = document.getElementById('upselectSkill');             
            let skillAry = ['Video Editing', 'Web Development', 'Graphic Designing', 'Content Writing', 'Digital Marketing'];
            let skillop = '';
            skillAry.forEach(x => {
                if (x === data[4]) {
                    skillop +=  `<option selected>${x}</option>`;
                }else{
                    skillop +=  `<option>${x}</option>`;
                }
            });
            selectSkill.innerHTML = skillop;
            
           
            console.log(data[4]);
        });


    }
})



// Delete data
deleteBtns.forEach( e => {
    e.onclick = () => {
        let deleteID = e.getAttribute('deleteID');
        // console.log(deleteID);

        fetch(`http://localhost/curdOpration/xtar/PHP/Curd/delete.php?getID=${deleteID}`)
        .then((Response) => Response.json())
        .then(data => {
            if(data.msg == 'success'){
                window.location = 'index.php';
            }
        })


    }
})