#include <stdio.h>

int main(void) {
	char s1[1000],s2[1000];
	gets(s1);
  gets(s2);
	if(sizeof(s1)>sizeof(s2))
	{
		printf("%s",s1);
	}
	else
	{
		printf("%s",s2);
	}
	return 0;
}
