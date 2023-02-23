document
  .querySelector("#marketing")
  .addEventListener("change", filterMarketing);
document.querySelector("#coding").addEventListener("change", filterCoding);
document.querySelector("#design").addEventListener("change", filterDesign);

function filterMarketing() {
  hideAllCards();

  if (document.querySelector("#marketing").checked) {
    document.querySelector("#marketing-icon").style.color = "red";
    document.querySelector("#design-icon").style.color = "black";
    document.querySelector("#coding-icon").style.color = "black";
    var marketingCards = document.querySelectorAll(".marketing");
    marketingCards.forEach((marketingCard) => {
      marketingCard.style.display = "inline-block";
    });

    document.querySelector("#design").checked = false;
    document.querySelector("#coding").checked = false;
  } else {
    showAllCards();
    document.querySelector("#marketing-icon").style.color = "black";
  }
}

function filterCoding() {
  hideAllCards();

  if (document.querySelector("#coding").checked) {
    document.querySelector("#coding-icon").style.color = "red";
    document.querySelector("#design-icon").style.color = "black";
    document.querySelector("#marketing-icon").style.color = "black";
    var codingCards = document.querySelectorAll(".coding");
    codingCards.forEach((codingCard) => {
      codingCard.style.display = "inline-block";
    });

    document.querySelector("#design").checked = false;
    document.querySelector("#marketing").checked = false;
  } else {
    showAllCards();
    document.querySelector("#coding-icon").style.color = "black";
  }
}

function filterDesign() {
  hideAllCards();

  if (document.querySelector("#design").checked) {
    document.querySelector("#design-icon").style.color = "red";
    document.querySelector("#marketing-icon").style.color = "black";
    document.querySelector("#coding-icon").style.color = "black";
    var designCards = document.querySelectorAll(".design");
    designCards.forEach((designCard) => {
      designCard.style.display = "inline-block";
    });

    document.querySelector("#marketing").checked = false;
    document.querySelector("#coding").checked = false;
  } else {
    showAllCards();
    document.querySelector("#design-icon").style.color = "black";
  }
}

function hideAllCards() {
  var allCards = document.querySelectorAll(".card");

  allCards.forEach((card) => {
    card.style.display = "none";
  });
}

function showAllCards() {
  var allCards = document.querySelectorAll(".card");

  allCards.forEach((card) => {
    card.style.display = "inline-block";
  });
}
