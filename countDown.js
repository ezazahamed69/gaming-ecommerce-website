function updateCountdown() {
    const targetDate = new Date("2023-09-20"); // Set your target date here
    const currentDate = new Date();
    
    const timeDifference = targetDate - currentDate;
    if (timeDifference <= 0) {
      document.getElementById("countdown").textContent = "Offer has ended!";
      return;
    }
  
    const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);
  
    const countdownElement = document.getElementById("countdown");
    countdownElement.textContent = `${days} Days ${hours} Hours ${minutes} Minutes ${seconds} Seconds`;
  }
  
  // Update the countdown every second
  setInterval(updateCountdown, 1000);
  
  // Initial call to set the countdown immediately
  updateCountdown();
  