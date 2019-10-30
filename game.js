var first=0;
var second=0;
var third=0;
var fourth=0;

var attempts=0;

function checkshuffle()
{
	
	first = Math.floor(Math.random() * 6);
	second = Math.floor(Math.random() * 6);
	while(first == second)
	{
		second = Math.floor(Math.random() * 6);
	}
	third = Math.floor(Math.random() * 6);
	while(third==first || third==second){
		third = Math.floor(Math.random() * 6);
	}
	fourth = Math.floor(Math.random() * 6);
	while(fourth==third || fourth==second || fourth==first)
	{
		fourth = Math.floor(Math.random() * 6);
	}
	
	attempts=5;
	document.getElementById("attempts").textContent = attempts;
	document.getElementById("one").value = 0;
	document.getElementById("two").value = 0;
	document.getElementById("three").value = 0;
	document.getElementById("four").value = 0;
	document.getElementById("one-text").textContent=" ";
	document.getElementById("two-text").textContent=" ";
	document.getElementById("three-text").textContent=" ";
	document.getElementById("four-text").textContent=" ";
	return false;
	
}

function checkguess()
{
	let one = document.getElementById("one").value;
	let two = document.getElementById("two").value;
	let three = document.getElementById("three").value;
	let four = document.getElementById("four").value;
	
	if(one == first){
		document.getElementById("one-text").textContent="O";
	}
	else if(one == second || one == third || one == fourth){
		document.getElementById("one-text").textContent="V";
	}
	else{
		document.getElementById("one-text").textContent="X";
	}
	
	if(two == second){
		document.getElementById("two-text").textContent="O";
	}
	else if(two == first|| two == third || two == fourth){
		document.getElementById("two-text").textContent="V";
	}
	else{
		document.getElementById("two-text").textContent="X";
	}
	
	if(three == third){
		document.getElementById("three-text").textContent="O";
	}
	else if(third == second || third == first || third == fourth){
		document.getElementById("three-text").textContent="V";
	}
	else{
		document.getElementById("three-text").textContent="X";
	}
	
	if(four == fourth){
		document.getElementById("four-text").textContent="O";
	}
	else if(four == second || four == first ||four == third ){
		document.getElementById("four-text").textContent="V";
	}
	else{
		document.getElementById("four-text").textContent="X";
	}
	
	
	attempts = attempts - 1;
	document.getElementById("attempts").textContent= attempts;
	if(attempts == 0 || attempts <0){
		alert("Game over")
	}
	
	oneTEXT = document.getElementById('one-text').textContent;
    twoTEXT = document.getElementById('two-text').textContent;
    threeTEXT = document.getElementById('three-text').textContent;
    fourTEXT = document.getElementById('four-text').textContent;
    
    

    if(oneTEXT == twoTEXT && oneTEXT == threeTEXT && oneTEXT == fourTEXT && oneTEXT == 'O'){
        document.getElementById('luck').textContent = "TOO GOOD";
    }
	
		
	
	return false;
		
}
