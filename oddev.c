#include <stdio.h>
main()
{
int num;
scanf("%d",&num);
if(num>0)
{
    if(num%2==0)
    {
    printf("Even");
    }
else if(num%2!=0)
    {
    printf("Odd");
    }
}
else
 { 
     printf("Invalid");
 }
}
