#include <stdio.h>
int main()
{
   int N,M,sum;
   scanf("%d %d",&N,&M);
   sum=N+M;
   (sum%2==0)?printf("even"):printf("odd");
    return 0;
}
