const popup = document.querySelector('.chat-popup');
const chatBtn = document.querySelector('.chat-btn');
const submitBtn = document.querySelector('.submit');
const chatArea = document.querySelector('.form');
const inputElm = document.querySelector('input');
const emojiBtn = document.querySelector('#emoji-btn');
const picker = new EmojiButton();
//   chat button toggler 

chatBtn.addEventListener('click', () => {
    popup.classList.toggle('show');
})

// send msg 
submitBtn.addEventListener('click', () => {
    let userInput = inputElm.value;


    let temp = `<div class="out-msg">
    <span class="my-msg">${userInput}</span>
    <img src="img/profile.png" class="avatar">
    </div>`;

    sender.insertAdjacentHTML("beforeend", temp);
    inputElm.value = '';

})