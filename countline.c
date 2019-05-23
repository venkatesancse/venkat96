#include<stdio.h>
#include<string.h>
#include<stdlib.h>
void main()
{
  char a[50];
  int n,s=1,i,b;
  gets(a);
  n=strlen(a);
  for(i=0;i<n;i++)
    {
    if(a[i]== '.')
    {
    s++;
    }
   }
   printf("%d",s);
   }
