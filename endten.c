#include <stdio.h>
int main()
{
   int n;
   scanf("%d",&n);
   (n%10==0)? printf("%d",n):printf("%d",n+(10-(n%10)));
    return 0;
}
