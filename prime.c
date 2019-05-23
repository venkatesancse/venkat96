#include<stdio.h>
void main()
{
int n,i,f;
scanf("%d",&n);
if (n<=1000)
{
for (i=2;i <= n/2;++i)
{
if(n%i==0)
{
f=1;
break;
}
}
(f==0)? printf("Yes") : printf("No");
}
else
{
printf("Invalid");
  }
  }

