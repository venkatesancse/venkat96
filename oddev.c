#include<stdio.h>
void main()
{
    int n;
    scanf("%d",&n);
    if(n>0)
        (n%2==0)?printf("even"):printf("odd");
    else
        printf("Invalid");
}
