#include<stdio.h>
void main()
{
int sn,en,num,r,sum,t;
scanf("%d",&sn);
scanf("%d",&en);
for(num=sn;num<=en;num++)
{
t=num;
sum=0;
while(t!=0)
{
r=t%10;
t=t/10;
sum=sum+(r*r*r);
}
if(sum==num)
printf("%d \n",num);
}
}
