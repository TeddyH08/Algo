// Exo 1

console.log("Exo 1");

var a = 5;
console.log(a);

// Exo 2

console.log("Exo 2");

var b = 5;
var c = 4;

console.log(b+c);
console.log(b-c);
console.log(b*c);

// Exo 3 

console.log("Exo 3");

var chaine = "Johann t'es beau";
console.log(chaine);

// Exo 4

console.log("Exo 4");

var cc = "Coucou";
var p = "petite péruche";
console.log(cc+" "+p);

// Exo 5 

console.log("Exo 5");

var x = 20;
var y = 30;
var z = x;

x = y;
y = z;

console.log(x);
console.log(y);

// Exo 6

console.log("Exo 6");

var i = 20;
var j = 10;

if (i > j) {
    console.log("i : "+i+" est plus grand que j : "+j);
}else if (i < j) {
    console.log("j : "+j+" est plus grand que i : "+i);
}else {
    console.log("i : "+i+" est égale à j : "+j);
}

// Exo 7

console.log("Exo 7");

var m = 20;
var n = 10;

function comparaison(m , n) {
    if (i > j) {
        console.log(m+" est plus grand que "+n);
    }else if (i < j) {
        console.log(n+" est plus grand que i"+m);
    }else {
        console.log(m+" est égale à "+n);
    }
}

comparaison(m, n);

// Exo 8

console.log("Exo 8");

var r = Math.floor(Math.random() * 100);
console.log(r);

// Exo 9

console.log("Exo 9");

for (var ra = 0; ra < 10; ra++) {
    console.log(Math.floor(Math.random() * 100));
}

// Exo 10

console.log("Exo 10");

var t = 0;

while (t <= 90) {
    console.log(t = Math.floor(Math.random() * 100));
}

