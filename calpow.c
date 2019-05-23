#include<stdio.h>
void main()
{
int b,e;
long long ans=1;
scanf("%d",&b);
scanf("%d",&e);
while(e!=0)
{
ans *=b;
--e;
}
printf("%lld",ans);
}
