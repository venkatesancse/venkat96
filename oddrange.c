#include<stdio.h>
void main()
{
int s,e;
scanf("%d",&s);
scanf("%d",&e);
if(e<=100000)
{
  for (int i=s;i<=e;i++)
    {
    if(i%2==1) 
      {
      printf("%d",i);
      }
    }
  }
else
{
printf("Invalid");
}
}
