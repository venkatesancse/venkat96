#include<stdio.h>
int main()
{
   int N,count=0;
   gets(N);
   while(N>0)
   {
       N=N/10;
       count=count+1;
   }
   printf("%d",count);
   
 
}
