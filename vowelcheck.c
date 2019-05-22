#include<stdio.h>
void main()
{
char x;
scanf("%c",&x);
if ((x>= 'a' && x<= 'z') || (x>= 'A' && x<= 'Z'))
{
(x == 'a' || x == 'e' || x== 'i' || x == 'o' || x == 'u' || x == 'A' || x == 'E' || x == 'I' || x == 'O' || x == 'U') ? printf("Vowel"): printf(" Consonent");
}
else
{
printf (" Invalid");
}
}
