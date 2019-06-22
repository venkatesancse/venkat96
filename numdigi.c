#include<stdio.h>
main()
{
	int ele,count;
	count=0;
	scanf("%d",&ele);
	while(ele)
	{
		count++;
		ele/=10;
	}
	printf("%d",count);
}
