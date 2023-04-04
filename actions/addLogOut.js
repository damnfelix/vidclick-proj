let ref = document.createElement('a');
ref.href = './php/logout.php'
ref.innerHTML = "Log Out";
let startVidclick = document.querySelector('.start-vidclick');
startVidclick.appendChild(ref);