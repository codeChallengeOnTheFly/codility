console.log("hello");

a = [1,2,3,4]

for (var i = 0; i < a.length; i++) {
  console.log(a[i]);
}

representation = [];
number = a[3];

//for(;number;number/=2){
//  representation.push(number % 2);
//}

for(;number;number/=2){
  representation.push(number % 2);
}

//console.log(number);
//console.log(representation);

//representation.reverse().join('');

console.log(number);
console.log(representation);
