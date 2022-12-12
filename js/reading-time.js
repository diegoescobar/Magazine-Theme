const post = document.getElementById("post");
const avgWordsPerMin = 250;
const readingTimeSummary = document.querySelector(".reading-time summary");
const readingTimeDetails = document.querySelector(".reading-time details span");

if ( post !== null  ){  
  setReadingTime();
}

function setReadingTime(){
    let count = getWordCount();
    let time = Math.ceil(count / avgWordsPerMin);

    readingTimeSummary.innerText = time + " min read";
    readingTimeDetails.innerText = count + " words read at " + avgWordsPerMin + " words per minute.";
}

function getWordCount(){
  return post.innerText.match(/\w+/g).length;
}