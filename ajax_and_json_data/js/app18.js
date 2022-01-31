const output = document.querySelector(".output");
const btn = document.querySelector("button");
const url = "https://randomuser.me/api?results=10";
// const url = "json/data18.json";


btn.addEventListener("click", getData);

function getData() {
	fetch(url)
	.then(response => response.json())
	.then(data => {
		outputResults(data.results)
	})
	.catch((error) => {
		console.error(error);
	})
}

function outputResults(arr) {
	output.innerHTML = "";
	arr.forEach((item, index) => {
		console.log(item);
		let html = `<div>${index+1}. ${item.name.title} ${item.name.first} ${item.name.last} </div><br><img src="${item.picture.large}" alt=""><hr>`
		output.innerHTML += html;
	});
}