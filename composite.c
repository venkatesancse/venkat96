#include<stdio.h>
#include<math.h>
int main()
{
	int n,itr,sqr;
	scanf("%d",&n);
	sqr=sqrt(n);
	for(itr=2;itr<=sqr;itr++)
	{
		if(n%itr==0)
		{
			printf("yes");
			break;
		}
	}
	if(itr==sqr+1)
	printf("no");
	return 0;
}
