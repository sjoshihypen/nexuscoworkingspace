const chatbot = document.querySelector('.chatbot');
const chatbotMessages = document.querySelector('.chatbot-messages');
const chatbotInput = document.querySelector('.chatbot-input input');

function openChatbot() {
  chatbot.style.display = 'block';
}

function closeChatbot() {
  chatbot.style.display = 'none';
}

function sendMessage() {
  const message = chatbotInput.value;
  if (message) {
    const messageElement = document.createElement('div');
    messageElement.classList.add('message', 'sent');
    messageElement.innerText = message;
    chatbotMessages.appendChild(messageElement);
    chatbotInput.value = '';
    getResponse(message);
  }
}

function getResponse(message) {
  const messageElement = document.createElement('div');
  messageElement.classList.add('message', 'received');
  messageElement.innerText = 'Thanks for your message: ' + message;
  chatbotMessages.appendChild(messageElement);
}
