#include<stdio.h>
void main()
{
int s,e ,i,f=0;
scanf("%d %d",&s,&e);
while(s<e)
{f=0;
for (i=2;i<=s/2;++i)
{
if(s%i==0)
{
f-=1;
break;
}
}
if(f==0)
printf("%d \n",s);
++s;
}
}
