#include<stdio.h>
void main()
{
int s, e,i;
scanf("%d",&s);
scanf("%d",&e);
for (i=s;i<=e;i++)
{
  if(i%2==0)
  {
  printf("%d \n",i);
  }
}
}
