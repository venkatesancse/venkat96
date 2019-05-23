#include<stdio.h>
void main()
{
int n,r,s=0,temp;
scanf("%d",&n);
if(n<=100000)
{
temp=n;
while(n>0)
{
r=n%10;
s=s+(r*r*r);
n=n/10;
}
(temp=s) ? printf("Yes") : printf("No");
}
else
{
printf("Invalid");
}
}

