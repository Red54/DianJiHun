#include <stdio.h>
int main()
{
	int i,s=0;
	for(i=3;i<1000;i++)
		if(i%10==0||i%10==5)s+=i;
		else if((i/100+i%10+i/10%10)%3==0)s+=i;
	printf("%d\n",s);
	return 0;
}
