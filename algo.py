from ast import If
from random import random, randrange
from statistics import variance


print("Hello World")

# Exo 1

print("Exo 1")

x = 2
print(x)

# Exo 2

print("Exo 1")

a = 5
b = 4

print(a + b)
print(a - b)
print(a * b)

# Exo 3

print("Exo 3")

c = "Jordan t'es beau"
print(c)

# Exo 4

print("Exo 4")

d = "Coucou"
e = "petite peruche"
print(d + " " + e)

# Exo 5

print("Exo 5")

f = 10
g = 20
h = f

f = g
g = h
print(f)
print(g)

# Exo 6

print("Exo 6")

i = 40
j = 40

if i > j :
    print("i > j")
elif i < j :
    print("i < j")
else :
    print("i = j")

# Exo 7

print("Exo 7")

k = 40
l = 30

def supinf(k, l) :
    if i > j :
        print("i > j")
    elif i < j :
        print("i < j")
    else :
        print("i = j")

supinf(k, l)

# Exo 8

print("Exo 8")

q = randrange(1, 100, 1)
print(q)


# Exo 9

print("Exo 9")

for m in range(10):
    print(randrange(0, 100, 1))

# Exo 10

print("Exo 10")

n = 0

while n <= 90 :
    n = randrange(0, 100, 1)
    print(n)

# Exo 11

print("Exo 11")

print("Entrez une variable")
o = input()

# Exo 12

print("Exo 12")

print("Entrez un nombre")
p = int(input())

print(p)

if (p % 2) == 0 :
    print("C'est un nombre pair".format(p))
else :
    print("C'est un nombre impair".format(p))

# Exo 13

print("Exo 13")

print("Entrez quelque chose")
s = input()

print(s)

