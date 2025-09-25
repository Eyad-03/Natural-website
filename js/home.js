var leftarrow  = document.getElementById('left-arrow');   
var rightarrow = document.getElementById('right-arrow');  

var data = [

  { p: "Wonderful experience! The natural soaps I ordered smell amazing and feel so gentle on my skin. Will definitely order again." },
  { p: "I love how easy it was to find organic teas on the website. Everything arrived fresh and carefully packed." },
  { p: "High-quality natural products at fair prices. The eco-friendly packaging was a big plus. Highly recommend this store!" },
  { p: "Fantastic website! I found great deals on essential oils and herbal products. Everything was exactly as described." },
  { p: "The ordering process was seamless, and the natural product set exceeded my expectations. Will shop again for sure." },
  { p: "Easy to navigate and full of authentic products. " },
  { p: "I had a question about ingredients, and customer support replied quickly with detailed info. Very reassuring." },
  { p: "We loved the natural products! The website is clear and simple to use. Perfect for gifts too." },
  { p: "Amazing! The plastic products were , authentic, and carefully packed. I appreciate the eco-friendly approach." },
  { p: "Customer service was excellent! They helped me choose the right natural products for my needs. Will order again." },

];



const cards = document.querySelectorAll('#review-card .feedback-card');
let counter = 3; 

leftarrow.addEventListener('click', function () {
  if (counter - 3 <= 0) {
    counter=data.length+3
    return;
  }
  counter -= 3;
  for (let i = 0; i < 3; i++) {
    const p = cards[i].querySelector('.part2-card p');
    p.textContent = data[counter - 3 + i].p;
  }
});

rightarrow.addEventListener('click', function () {
  if (counter + 3 > data.length) {
    counter=0
    return;
  }
  for (let i = 0; i < 3; i++) {
    const p = cards[i].querySelector('.part2-card p');
    p.textContent = data[counter + i].p;
  }
  counter += 3;
});