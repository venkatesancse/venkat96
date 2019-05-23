#include <stdio.h>
 
void main()
{
    long i, k;
    scanf("%ld %ld", &i, &k);
    i = i ^ k;
    k = i ^ k;
    i = i ^ k;
    printf("\n  %ld %ld", i, k);
}
