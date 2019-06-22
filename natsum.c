#include<stdio.h>
void main()
{
	int n,nat;
	int sum=0;
	scanf("%d",&n);
	for(nat=1;nat<=n;nat++)
	{
		sum+=nat;
	}
	printf("%d",sum);
}
