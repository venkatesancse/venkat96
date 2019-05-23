#include<stdio.h>
void main()
{
long int l;
int count=0;
scanf("%ld",&l);
while(l!=0)
{
l/=10;
++count;
}
printf("%d",count);
}
