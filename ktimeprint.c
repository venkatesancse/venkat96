#include<stdio.h>
#include<stdlib.h>
void main()
{
  char s[100];
  int k;
  gets(s);
  scanf("%d",&k);
  for(int i=0;i<k;i++)
    {
      printf("%s \n",s);
    }
  }
