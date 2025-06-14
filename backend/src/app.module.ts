import { Module } from '@nestjs/common';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { DestinationsModule } from './modules/destinations/destinations.module';

@Module({
  // TODO: Add modules here
  imports: [DestinationsModule],
  controllers: [AppController],
  providers: [AppService],
})
export class AppModule {}
