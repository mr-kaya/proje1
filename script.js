const signUpButton= document.getElementById('signUp');
const signInButton= document.getElementById('signIn');
const fistForm= document.getElementById("form1");
const secondForm= document.getElementById("form2");
const container= document.querySelector('.container');


signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});
signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
 });
fistForm.addEventListener("submit", (e) => e.preventDefault());
secondForm.addEventListener("submit", (e) => e.preventDefault());


function togglePassword() {
    var element = document.getElementById('password');
    element.type = (element.type == 'password' ? 'text' : 'password');
}