// Fibo series

let a=0 , b= 1, next;


console.log('fibo series');

for(let i = 0 ; i<= 12; i++){
console.log(a);
 next = a +b;
 a = b;
 b = next;

}

// fizzbuzz
// if multiple of 3 print fizz if multiple of 5 buzz and if both fizzbuzz

console.log('Fizz Buzz');

//  let a = 9;

 for (a=0; a<=16; a++){
    if(a%15===0){
        console.log(`${a}=fizzbuzz`);
    }
else if(a%5===0){
    console.log(`${a}=buzz`);
 }
else  if(a%3===0){
    console.log(`${a}=fizz`);
 }
 }
 
//  factorial

function f(){
    let num, fa;
    fa=1;
    num = document.getElementById("fact").value;
    for(let i= 1 ; i<=num; i++){
        fa*=i;
    }

 document.getElementById("btn").innerHTML="the factorial of the number "+num+" is "+fa;
}