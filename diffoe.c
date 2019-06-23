#include <stdio.h>
int main()
{
   int N,M,d;
   scanf("%d %d",&N,&M);
   d=N-M;
   (d%2==0)?printf("even"):printf("odd");
   return 0;
}
