const clickLoginIcon = document.querySelector('.box_icon_login');
const boxLogin = document.querySelector('.box_login');
const closeLoginBox = document.querySelector('.close_login_button');
const dangKi = document.querySelector('.dangki');
// Login button
clickLoginIcon.addEventListener('click', () => {
    boxLogin.classList.add('active');
});
closeLoginBox.addEventListener('click', () => {
    boxLogin.classList.remove('active');
});

dangKi.addEventListener('click', () => { 
    alert('Chức năng đang được phát triển hoặc liên hệ Admin!');
})

const totalPrice = document.querySelector(".tong_gia_sanpham");
const inputSanpham = document.querySelector(".so_luong");

inputSanpham.addEventListener("change", () => {
    totalPrice.innerHTML = inputSanpham.value * 1000000;
});