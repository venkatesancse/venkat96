#include <stdio.h>
int main()
{
    int N,M,pro;
    scanf("%d",&N);
    scanf("%d",&M);
    pro=N*M;
    if(pro%2==0)
    {
        printf("even");
    }
    else
    {
        printf("odd");
    }

    return 0;
}
