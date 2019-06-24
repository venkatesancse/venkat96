#include <stdio.h>
int main()
{
    int num, f;
    scanf("%d",&num);
    for(f=1; f<= num; ++f)
    {
        if (num%f == 0)
        {
            printf("%d ",f);
        }
    }
    return 0;
}
