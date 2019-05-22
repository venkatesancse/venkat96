#include<stdio.h>
main()
{
char s;
scanf("%c",&s);
if (( s>= 'a' && s<= 'z' ) ||( s >= 'A' && s<= 'Z'))
printf("Alphabet");
else
printf("No");
}
