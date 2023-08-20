
function openForm() {
    let form=document.getElementById("popForm").style="display:block;";
    let info=document.getElementById("contactInfo").style="display:block;";
    let button=document.getElementById("contactButton").style="display:none;";
}

function closeForm() {
    let form=document.getElementById("popForm").style="display:none;";
    let info=document.getElementById("contactInfo").style="display:none;";
    let button=document.getElementById("contactButton").style="display:block;";
    button=document.getElementById("contactButton").style="text-align:center;";
}

function pop() {
    return alert("Entry Successful!\nWe will Contact Soon\nThank You for reaching US");
}
