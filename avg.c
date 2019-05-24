#include <stdio.h>
void main()
{
    int a[100],n,i,sum=0,avg=0;
    scanf("%d",&n);
    for(i=0;i<n;i++)
    {
        scanf("%d",&a[i]);
        
    }
    for(i=0;i<n;i++)
    {
      sum=sum+a[i];
    }
avg=sum/n;
printf("%d",avg);
}
