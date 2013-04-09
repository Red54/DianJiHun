#include <stdio.h>
int main()
{
	long long i,j,k,s=0;
	for(i=2;i<2000000;i++)
	{
		k=1;
		for(j=2;j*j<=i;j++)
			if(!(i%j))
			{
				k=0;
				break;
			}
		if(k)s+=i;
	}
	printf("%lld\n",s);
	return 0;
}
