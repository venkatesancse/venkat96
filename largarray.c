#include<stdio.h>
void main()
{
int a[100],max,size,i,n=1;
scanf("%d",&size);
for(i=0;i<size;i++)
  {
  scanf("%d",&a[i]);
  }
  if(1<size && size<=100000)
  {
  max=a[0];
  for(i=1;i<size;i++)
  {
  if(a[i]>max)
  {
  max=a[i];
  n=i+1;
  }
  }
  printf("%d",max);
  }
  else
  {
  printf("Invalid");
  }}
