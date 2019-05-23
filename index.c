#include<stdio.h>
void main()
{
int ar[100],i,j,n;
scanf("%d",&n);
  if(n>1)
  {
for(i=0;i<n;i++)
  {
    scanf("%d",&ar[i]);
   }
 for(i=0;i<n;i++)
 {
 printf("%d \t %d ",ar[i],i);
   printf("\n");
 }
  }
  else
  {
    printf("Invalid");
  }
 }
