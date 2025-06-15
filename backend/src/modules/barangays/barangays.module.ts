import { Module } from '@nestjs/common';
import { BarangaysController } from './barangays.controller';
import { BarangaysService } from './barangays.service';

@Module({
    controllers: [BarangaysController],
    providers: [BarangaysService],
})
export class BarangaysModule { }
