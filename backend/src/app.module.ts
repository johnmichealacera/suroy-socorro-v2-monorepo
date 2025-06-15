import { Module } from '@nestjs/common';
import { ConfigModule, ConfigService } from '@nestjs/config';
import { TypeOrmModule } from '@nestjs/typeorm';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { DestinationsModule } from './modules/destinations/destinations.module';
import { BarangaysModule } from './modules/barangays/barangays.module';
import { TouristSpotsModule } from './modules/tourist-spots/tourist-spots.module';
import { Barangay } from './database/entities/barangay.entity';
import { TouristSpot } from './database/entities/tourist-spot.entity';
import { SpotCategory } from './database/entities/spot-category.entity';
import { Image } from './database/entities/image.entity';
import { ImagesModule } from './modules/images/images.module';

@Module({
  imports: [
    ConfigModule.forRoot({
      isGlobal: true,
    }),
    TypeOrmModule.forRoot({
      type: 'postgres',
      host: process.env.DB_HOST,
      port: parseInt(process.env.DB_PORT || '5432'),
      username: process.env.DB_USERNAME,
      password: process.env.DB_PASSWORD,
      database: process.env.DB_NAME,
      ssl: {
        rejectUnauthorized: false,
      },
      synchronize: process.env.NODE_ENV !== 'production',
      logging: process.env.NODE_ENV !== 'production',
      entities: [Barangay, TouristSpot, SpotCategory, Image],
      autoLoadEntities: true,
    }),
    DestinationsModule,
    BarangaysModule,
    TouristSpotsModule,
    ImagesModule,
  ],
  controllers: [AppController],
  providers: [AppService],
})
export class AppModule { }
